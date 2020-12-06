# Starting with PHP

[PHP Manual](https://www.php.net/manual/en/langref.php) <br/>
At the end of each statement,we will use a semicolon to seperate each statement.
Php closing tag autometically implies a semiclon.So last line of a statment do not require a statement.
```PHP
<?php echo "first statement <br>";
      echo "second statement <br>"
?>
```

Closing tag is optional and some cases omitting the closing tag is very helpful.
1. using include or require function
2. unwanted whitespace will not occur at the end of file
3. add header any time

```PHP
<?php echo "omitting closing tag";
```

## Data Types
#### Four scalar types:
1. bool
2. int
3. floa
4. string
   
#### Four compound types:


1. array
2. object
3. [callable](https://www.php.net/manual/en/language.types.callable.php)
4. [iterable](https://www.php.net/manual/en/language.types.iterable.php)

#### two special types:
1. resource
2. NULL

#### NULL:
The special NULL value represents a variable with no value. NULL is the only possible value of type null.
A variable is considered to be null if:
1. it has been assigned the constant NULL.
2. it has not been set to any value yet.
3. it has been unset().