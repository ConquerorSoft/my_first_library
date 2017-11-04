# My First Library #

This is my very first library I created at php[world]. I learned that I have to create a README file to provide a description of my library so it can be used by other projects or persons.

### The steps to create my first library ###

1. create the my_first_library directory

    cd ~ && mkdir -p phplibrary/my_first_library && cd phplibrary/my_first_library

2. create a README.md file

    vim README.md

3. initialize a git repository

    git init

4. Do the first commit

    git add .
    git commit -m "First commit of my library"

5. Assign a version to your library

    git tag -a v0.1.0 -m "version 0.1.0"
