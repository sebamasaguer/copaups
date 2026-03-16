import os
import re
from pathlib import Path

def extract_links(content):
    # Regex to find href="..." and src="..."
    hrefs = re.findall(r'href=["\'](.*?)["\']', content)
    srcs = re.findall(r'src=["\'](.*?)["\']', content)
    return set(hrefs + srcs)

def is_external(link):
    return link.startswith(('http://', 'https://', '//'))

def check_internal_link(base_dir, current_file_dir, link):
    if not link or link.startswith('#') or link.startswith('javascript:') or link.startswith('mailto:'):
        return True

    # Handle PHP echoes or variables (simplified)
    if '<?=' in link or '<?php' in link or '.php' in link and '$' in link:
        return True

    # Remove query params or anchors
    clean_link = link.split('?')[0].split('#')[0]
    if not clean_link:
        return True

    # Handle absolute paths (starting with /) - assuming root is public_html
    if clean_link.startswith('/'):
        target_path = Path('public_html') / clean_link.lstrip('/')
    else:
        target_path = Path(current_file_dir) / clean_link

    return target_path.exists()

def main():
    base_dir = 'public_html'
    broken_links = []

    exclude_dirs = {
        'OwlCarousel', 'ViewerJS-master', 'fancybox', 'assets/libs',
        'plugins', '.git', 'styles', 'js'
    }

    files_to_check = []
    for root, dirs, files in os.walk(base_dir):
        # Filter directories
        dirs[:] = [d for d in dirs if d not in exclude_dirs]

        for file in files:
            if file.endswith(('.php', '.html')):
                files_to_check.append(os.path.join(root, file))

    for filepath in files_to_check:
        try:
            with open(filepath, 'r', encoding='utf-8', errors='ignore') as f:
                content = f.read()
                links = extract_links(content)
                current_file_dir = os.path.dirname(filepath)

                for link in links:
                    if not is_external(link):
                        if not check_internal_link(base_dir, current_file_dir, link):
                            broken_links.append((filepath, link))
        except Exception as e:
            print(f"Error reading {filepath}: {e}")

    if broken_links:
        print(f"Found {len(broken_links)} broken internal links in application files:")
        # Sort by file for better reporting
        broken_links.sort()
        for file, link in broken_links:
            print(f"File: {file} -> Link: {link}")
    else:
        print("No broken internal links found in application files.")

if __name__ == "__main__":
    main()
