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
### Create a new role with name equal to <ins>user-list</ins>
```php
Role::create(['name' => 'superadmin']);
```
### Create a new permision with name equal to <ins>user-list</ins>
```php
Permission::create(['name' => 'user-list']);
```
### Sync rule to permession
```php
 Role::find(2)->syncPermissions(["user-list",'user-create','user-edit','user-delete',"role-list",'role-create','role-edit','role-delete',"propriete-list",'propriete-create','p
ropriete-edit','propriete-delete'])
```


