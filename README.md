Persian Character conversion
=========

Arabic Numbers
----

Replace Arabic numbers with Persian numbers

```php
<?php
$res = PersianChar::ar_numbers('۱۲۳۴1234١٢٣٤')
// ۱۲۳۴1234۱۲۳۴
```

English Numbers
----

Replace English numbers with Persian numbers

```php
<?php
$res = PersianChar::en_numbers('۱۲۳۴1234١٢٣٤')
// ۱۲۳۴۱۲۳۴١٢٣٤
```

Arabic/English Numbers
----

Replace both Arabic and English numbers with Persian numbers

```php
<?php
$res = PersianChar::numbers('۱۲۳۴1234١٢٣٤')
// ۱۲۳۴۱۲۳۴۱۲۳۴
```

Letters
----

Replace none Persian character with Persian character.
This method covers most character in Arabic [character table].

```php
<?php
$res = PersianChar::letters('ؠک مټن تﺴت')
// یک متن تست
```

Note that this method will also remove [non printable] characters like U+200F

Installation
=========

Composer
----

```sh
php composer.phar require intuxicated/persian-text '~1.0@dev'
```

Raw PHP
----
```sh
git clone https://github.com/intuxicated/PersianChar.git
```

Remove `namespace Intuxicated\PersianChar;` if your code doesn't support [php namespace]


[character table]:http://utf8-chartable.de/unicode-utf8-table.pl?start=1536&utf8=string-literal
[non printable]:http://en.wikipedia.org/wiki/Non-printing_character.
[php namespace]:http://php.net/manual/en/language.namespaces.rationale.php