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

### Get the collections objects of permissions of a user

```php
$user->permissions();
```
### Get the role names of an user
```php
$user->getRoleNames();
```
