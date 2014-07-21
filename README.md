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

Note that this method will also remove [none printable] characters like U+200F


[character table]:http://utf8-chartable.de/unicode-utf8-table.pl?start=1536&utf8=string-literal
[none printable]:http://en.wikipedia.org/wiki/Non-printing_character.