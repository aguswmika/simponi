# SIMPONI

Framework Pribadi Kalo Misal Disuruh Native

# Dokumentasi

## Input File

#### Method POST
```php
Input::post('username') // isset($_POST['username']) ? $_POST['username'] : null
```

#### Method GET
```php
Input::get('username') // isset($_GET['username']) ? $_GET['username'] : null
```

#### Method FILES
```php
/*
example: 
upload file = Image1.png
*/
$file = Input::file('foto');
$file->getName(); // Image1
$file->getExtension(); // png
$file->upload('path/to/upload'); // path/to/upload/Image1.png
```

To change name file
```php
$new_name = 'Myimage';
$file = Input::file('foto');
$file->upload('path/to/upload', $new_name); // path/to/upload/Myimage.png
```