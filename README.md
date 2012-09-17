ZL-coding-standard
==================

Installation instruction:

1. Install PHP CodeSniffer according to instruction found here:

	http://pear.php.net/package/PHP_CodeSniffer/redirected

2. Find PEAR directory:

		pear config-show | grep php_dir

3. Checkout this two repos to folder `/path/to/pear/PHP/CodeSniffer/Standards`:

		git clone git://github.com/opensky/Symfony2-coding-standard.git Symfony2
		git clone git://github.com/gellu/ZL-coding-standard ZL

4. Set ZL as default coding standard:

		phpcs --config-set default_standard ZL

5. Go to `PHPStorm -> Preferences` and use search with phrase `code sniffer` to find `PHP Code Sniffer validation`. Set path to phpcs and choose `ZL` standard as current. Apply.

6. Done :)