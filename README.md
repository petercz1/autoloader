# Simple PHP autoloader

About as simple as it gets and still be useful. Uses [spl_autoload_register
]()

Note: it assumes the following:

* one class per file
* filename is the same as the classname
* no filename duplication, ie folder1/myclass.php and folder2/myclass.php won't work

