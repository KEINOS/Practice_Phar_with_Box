[[日本語](https://qiita.com/KEINOS/items/620be6b1e043a5023e3c)]

# Sample script to archive PHP files as `Phar` using [`Box`](https://github.com/box-project/box2) with auto version insertion

## TL;DR
> Clone, run `install.php`, edit `index.php`, commit changes, add git tag, build app, and then run built app.

### What this app does
It just echoes "Hello world!" and version info. See [`index.php`](https://github.com/KEINOS/Practice_Phar_with_Box/blob/master/src/index.php).

But when archiving it to `.Phar` file via `Box`, `Box` will automatically replace values such as:

1. version number(git tag)
1. build date
1. build ID(commit ID)

### How to 

## TS;DR
1. Clone this repo.
2. run `install.php` to install `box.phar` (or get your own `box.phar`).

    ```bash
    $ ls
    box.json	install.php	src
    $ chmod 0755 ./install.php
    $ php ./install.php
    ...
    $ ls
    box.json	box.phar	install.php	src
    ```

3. Edit source code at `src/` dir. (Ex: 'Hello world!' -> '¡Hola Mundo!')

4. Commit your changes.

    ```bash
    $ ls -a
    .		.git		box.json	install.php
    ..		.gitignore	box.phar	src
    $ git commit -a -m "docs: changed 'Hello wolrd' to spanish"
    ```

5. Add a tag as your App version.

    ```bash
    $ ls -a
    .		.git		box.json	install.php
    ..		.gitignore	box.phar	src
    $ git tag
    $ git tag v0.1.1-rc
    $ git tag
    v0.1.1-rc
    ```

6. Build your Phar app.

    ```bash
    $ ls
    box.json	box.phar	install.php	src
    $
    $ php ./box.phar build -c ./box.json
    Building...
    $
    $ ls
    HelloWorld.phar	box.phar	src
    box.json	install.php
    ```

7. Run your Phar app.(`HelloWorld.phar`)

    ```bash
    $ ls
    HelloWorld.phar	box.phar	src
    box.json	install.php
    $
    $ ./HelloWorld.phar
    Hello world!
    Git version       : v0.1.1-rc
    Git commit(long)  : df26bed?????????????????????????????????
    Git commit(short) : df26bed
    Git tag           : v0.1.1-rc
    Date build        : 2018-02-01 13:05:52
    ```

## Read the Source, you will

- https://github.com/KEINOS/Practice_Phar_with_Box

