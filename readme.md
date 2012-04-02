StartApp
========

Install
-------
    git clone git@github.com:karagodin/StartApp.git
    cd StartApp
    git submodule update --init

Configs
-------
Все настройки приложения разделены на три файла web.php, console.php, test.php - соответственно режиму
работы. Все режимы работы имеют набор общих настроек которые задаются в файле main.php, в этом файле
можно задавать только те параметры, которые есть у класса CApplication, так как они будут использоваться
и консольным и веб-приложением. Любые настройки вы можете переопределить в файле local_<имя конфига>.php, пример
смотрите в файле local_example.php. Файлы с маской local*.php добавлены в gitignore.

Autocompletion in IDE
---------------------
Чтобы получить хороший автокомплит для метода Yii::app(), настройте свою IDE так чтобы
она игнорировалала файлы yii.php и yiilite.php из папки yii/framework.

Installed extensions
--------------------
1. [yii-debug-toolbar](http://www.yiiframework.com/extension/yii-debug-toolbar/)

