### Assign role to user

```php
 $user->assignRole("role_name")
```

### Users that have no rules

```php
User::doesntHave('roles')->get();
```

### Get all rules and their id

```php
Role::all()->pluck('name','id')
```

### Get the collections of permissions name of a user

```php
  $user->getPermissionNames();
```
### Get All permissions of a user

```php
$user->getAllPermissions();
```

### Get the collections objects of permissions of a user

```php
$user->permissions();
```
### Get the role names of an user
```php
$user->getRoleNames();
```
### Add Permission to a user
```php
$user->givePermissionTo($permission);
```
### Sync these 4 Permissions to that role having id=2
```php
$role = Role::find(2)
$role->syncPermissions(["user-list",'user-create','user-edit','user-delete'])
```
### Create a new permision called <ins>user-list</ins>
```php
Permission::create(['name' => 'user-list']);
```


