import os

def find_blade_files(directory):
    # List all files in the directory
    files = os.listdir(directory)
    
    # Filter files that end with '*.blade.php'
    blade_files = [file for file in files if file.endswith('.blade.php')]
    
    return blade_files

# Get the directory of the script
directory_path = os.path.dirname(os.path.abspath(__file__))

# Call the function to find blade files in the directory
blade_files = find_blade_files(directory_path)

# Print the names of blade files without the .blade.php extension
print("Blade Files:")
for file in blade_files:
    # Split the file name based on the dot (.)
    parts = file.split('.')
    
    # Remove the last two parts (blade and php)
    filename_without_extension = '.'.join(parts[:-2])
    print(f"Route::get('/{filename_without_extension}', function () {{ return view('{filename_without_extension}'); }});")
    # print(filename_without_extension)
