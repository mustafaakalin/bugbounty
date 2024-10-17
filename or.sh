#!/bin/bash

# Input file containing URLs (replace with your actual file)
input_file="open_redirect.txt"

# Loop through each line in the file
while IFS= read -r url; do
    # Append https://evil.com after the "="
    modified_url="${url}https://evil.com"
    
    # Use curl to get response headers and status code
    response=$(curl -s -o /dev/null -w "%{http_code},%{redirect_url}" "$modified_url")
    
    # Split response into status code and location
    status_code=$(echo "$response" | cut -d ',' -f 1)
    location_header=$(echo "$response" | cut -d ',' -f 2)
    
    # Check if location header contains https://evil.com (indicating an open redirect)
    if [[ "$status_code" == "3"* && "$location_header" == *"evil.com"* ]]; then
        echo "Potential Open Redirect: $modified_url"
        echo "Status Code: $status_code"
        echo "Redirected To: $location_header"
    else
        echo "No Open Redirect: $modified_url"
        echo "Status Code: $status_code"
    fi
done < "$input_file"

