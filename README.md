# Flash

## 1. Создать объект класса и добавить css стили для типов сообщений:
`$flash = new Flash;`

## 2. Добавляет сообщение и тип в список сообщений:
`$flash->add($message, $type)`;

## 3. Выводит флешку с сообщениями определенного типа:

`$flash->show($type = null);`

## 4. Выводит флешки с сообщениями всех типов в html:
`$flash->showAll();`

## 5. Удаляет флешку по типу и принадлежащие ей сообщения:
`$flash->clear($type);`

## 6. Удаляет все флешки:
`$flash->clearAll();`