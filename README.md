# Simple PHP autoloader

About as simple as it gets and still be useful. Uses [spl_autoload_register
](https://www.php.net/manual/en/function.spl-autoload-register.php)

![](demo.gif)

Note: it assumes the following:

* one class per file
* filename is the same as the classname
* classes are in a folder called 'classes'
  * change this by altering line 10 `private $classesFolder = 'classes';`
* no filename duplication, ie folder1/myclass.php and folder2/myclass.php won't work

Also I used [throwable](https://www.php.net/manual/en/class.throwable.php) from php7 in the catch() on line 53

If you're using php 5.x try something like

```
catch(Exception $ex){
    error_log($ex)
}
```
More help [here](https://www.php.net/manual/en/language.errors.php7.php).

## structure

Looks as follows:
```
-------------------------------------------------------------------------------
 Language            Files        Lines         Code     Comments       Blanks
-------------------------------------------------------------------------------
 Markdown                1           33           33            0            0
 PHP                     4           88           51           24           13
-------------------------------------------------------------------------------
 Total                   5          121           84           24           13

├── classes
│   ├── autoloader.php
│   ├── dbstuff
│   │   └── mydb.php
│   └── frontendstuff
│       └── myfrontend.php
├── index.php
└── README.md
```