<?php
/**
 * Question Pool with Difficulty Levels
 * 100 Questions: 34 Easy, 33 Medium, 33 Hard
 */

$questionPool = [
    // --- EASY (34) ---
    [
        "id" => 1,
        "question" => "What does PHP stand for?",
        "options" => ["Personal Home Page", "PHP: Hypertext Preprocessor", "Private Hypertext Processor", "Public Hypertext Page"],
        "answer" => "PHP: Hypertext Preprocessor",
        "difficulty" => "Easy"
    ],
    [
        "id" => 2,
        "question" => "Which superglobal is used to collect form data after submitting an HTML form with method='post'?",
        "options" => ["\$_GET", "\$_REQUEST", "\$_POST", "\$_SERVER"],
        "answer" => "\$_POST",
        "difficulty" => "Easy"
    ],
    [
        "id" => 3,
        "question" => "Which symbol is used to start a variable in PHP?",
        "options" => ["&", "#", "!", "\$"],
        "answer" => "\$",
        "difficulty" => "Easy"
    ],
    [
        "id" => 4,
        "question" => "How do you write 'Hello World' in PHP?",
        "options" => ["Document.Write('Hello World');", "echo 'Hello World';", "println('Hello World');", "response.write('Hello World');"],
        "answer" => "echo 'Hello World';",
        "difficulty" => "Easy"
    ],
    [
        "id" => 5,
        "question" => "All PHP variables must begin with which character?",
        "options" => ["&", "!", "\$", "%"],
        "answer" => "\$",
        "difficulty" => "Easy"
    ],
    [
        "id" => 6,
        "question" => "PHP server scripts are surrounded by which delimiters?",
        "options" => ["<script>...</script>", "<?php...?>", "<?...?>", "<&>...</&>"],
        "answer" => "<?php...?>",
        "difficulty" => "Easy"
    ],
    [
        "id" => 7,
        "question" => "Which of the following is the correct way to end a PHP statement?",
        "options" => [".", ";", "!", "New line"],
        "answer" => ";",
        "difficulty" => "Easy"
    ],
    [
        "id" => 8,
        "question" => "How do you create a comment in PHP?",
        "options" => ["//", "/*...*/", "#", "All of the above"],
        "answer" => "All of the above",
        "difficulty" => "Easy"
    ],
    [
        "id" => 9,
        "question" => "Is PHP case-sensitive when it comes to variable names?",
        "options" => ["Yes", "No"],
        "answer" => "Yes",
        "difficulty" => "Easy"
    ],
    [
        "id" => 10,
        "question" => "What is the correct way to include a file in PHP?",
        "options" => ["include 'filename.php';", "using 'filename.php';", "import 'filename.php';", "require_file('filename.php');"],
        "answer" => "include 'filename.php';",
        "difficulty" => "Easy"
    ],
    [
        "id" => 11,
        "question" => "Which function is used to get the length of a string?",
        "options" => ["length()", "strlen()", "str_len()", "count()"],
        "answer" => "strlen()",
        "difficulty" => "Easy"
    ],
    [
        "id" => 12,
        "question" => "Which operator is used for concatenation in PHP?",
        "options" => ["+", ".", "&", "*"],
        "answer" => ".",
        "difficulty" => "Easy"
    ],
    [
        "id" => 13,
        "question" => "Which function returns the number of elements in an array?",
        "options" => ["count()", "size()", "elements()", "length()"],
        "answer" => "count()",
        "difficulty" => "Easy"
    ],
    [
        "id" => 14,
        "question" => "What is the result of 5 + '5' in PHP?",
        "options" => ["10", "55", "Error", "5 + 5"],
        "answer" => "10",
        "difficulty" => "Easy"
    ],
    [
        "id" => 15,
        "question" => "Which keyword is used to declare a constant?",
        "options" => ["const", "define", "Both const and define", "static"],
        "answer" => "Both const and define",
        "difficulty" => "Easy"
    ],
    [
        "id" => 16,
        "question" => "Which superglobal is used to collect form data from method='get'?",
        "options" => ["\$_POST", "\$_GET", "\$_REQUEST", "\$_SERVER"],
        "answer" => "\$_GET",
        "difficulty" => "Easy"
    ],
    [
        "id" => 17,
        "question" => "How do you start a session in PHP?",
        "options" => ["session_start();", "start_session();", "begin_session();", "session();"],
        "answer" => "session_start();",
        "difficulty" => "Easy"
    ],
    [
        "id" => 18,
        "question" => "Which tag is used for an auto-echo in PHP?",
        "options" => ["<?= ?>", "<% %>", "<?php echo ?>", "<var> </var>"],
        "answer" => "<?= ?>",
        "difficulty" => "Easy"
    ],
    [
        "id" => 19,
        "question" => "Does PHP require you to define the data type of a variable?",
        "options" => ["Yes", "No"],
        "answer" => "No",
        "difficulty" => "Easy"
    ],
    [
        "id" => 20,
        "question" => "Which of the following is NOT a valid variable name?",
        "options" => ["\$myVar", "\$_myVar", "\$1myVar", "\$my_Var"],
        "answer" => "\$1myVar",
        "difficulty" => "Easy"
    ],
    [
        "id" => 21,
        "question" => "What is the correct way to create a function in PHP?",
        "options" => ["function myFunction()", "create myFunction()", "new function myFunction()", "def myFunction()"],
        "answer" => "function myFunction()",
        "difficulty" => "Easy"
    ],
    [
        "id" => 22,
        "question" => "How do you call a function named 'myFunction'?",
        "options" => ["myFunction();", "call myFunction();", "myFunction.call();", "execute myFunction();"],
        "answer" => "myFunction();",
        "difficulty" => "Easy"
    ],
    [
        "id" => 23,
        "question" => "Which type of array uses strings as keys?",
        "options" => ["Indexed array", "Associative array", "Multidimensional array", "Object array"],
        "answer" => "Associative array",
        "difficulty" => "Easy"
    ],
    [
        "id" => 24,
        "question" => "Which operator is used to check if two values and types are equal?",
        "options" => ["==", "===", "=", "!=="],
        "answer" => "===",
        "difficulty" => "Easy"
    ],
    [
        "id" => 25,
        "question" => "What does the 'break' statement do in a loop?",
        "options" => ["Skips one iteration", "Exits the loop", "Starts the loop over", "Slows down the loop"],
        "answer" => "Exits the loop",
        "difficulty" => "Easy"
    ],
    [
        "id" => 26,
        "question" => "Which function is used to find the position of the first occurrence of a substring in a string?",
        "options" => ["strpos()", "substr()", "str_find()", "search()"],
        "answer" => "strpos()",
        "difficulty" => "Easy"
    ],
    [
        "id" => 27,
        "question" => "What is the result of 10 % 3?",
        "options" => ["1", "3", "0.33", "Error"],
        "answer" => "1",
        "difficulty" => "Easy"
    ],
    [
        "id" => 28,
        "question" => "Which function is used to convert a string to all lowercase?",
        "options" => ["lower()", "strlower()", "strtolower()", "case_lower()"],
        "answer" => "strtolower()",
        "difficulty" => "Easy"
    ],
    [
        "id" => 29,
        "question" => "Which function is used to check if a variable is set and is not NULL?",
        "options" => ["is_null()", "isset()", "is_set()", "empty()"],
        "answer" => "isset()",
        "difficulty" => "Easy"
    ],
    [
        "id" => 30,
        "question" => "What logic does the '||' operator represent?",
        "options" => ["AND", "OR", "NOT", "XOR"],
        "answer" => "OR",
        "difficulty" => "Easy"
    ],
    [
        "id" => 31,
        "question" => "What logic does the '&&' operator represent?",
        "options" => ["AND", "OR", "NOT", "XOR"],
        "answer" => "AND",
        "difficulty" => "Easy"
    ],
    [
        "id" => 32,
        "question" => "How do you output the data type and value of a variable?",
        "options" => ["var_dump()", "print_r()", "echo", "info()"],
        "answer" => "var_dump()",
        "difficulty" => "Easy"
    ],
    [
        "id" => 33,
        "question" => "Which keyword is used to include a file and stop execution if it file is missing?",
        "options" => ["include", "require", "import", "open"],
        "answer" => "require",
        "difficulty" => "Easy"
    ],
    [
        "id" => 34,
        "question" => "Which function is used to remove whitespace from both sides of a string?",
        "options" => ["strip()", "trim()", "clean()", "cut()"],
        "answer" => "trim()",
        "difficulty" => "Easy"
    ],

    // --- MEDIUM (33) ---
    [
        "id" => 35,
        "question" => "What is the purpose of the 'foreach' loop?",
        "options" => ["To iterate over an array", "To loop a specific number of times", "To loop while a condition is true", "To define a function"],
        "answer" => "To iterate over an array",
        "difficulty" => "Medium"
    ],
    [
        "id" => 36,
        "question" => "What is the difference between include and require?",
        "options" => ["Include generates a fatal error", "Require generates a warning", "Require generates a fatal error", "There is no difference"],
        "answer" => "Require generates a fatal error",
        "difficulty" => "Medium"
    ],
    [
        "id" => 37,
        "question" => "How can you get the current Unix timestamp in PHP?",
        "options" => ["date()", "timestamp()", "time()", "now()"],
        "answer" => "time()",
        "difficulty" => "Medium"
    ],
    [
        "id" => 38,
        "question" => "Which superglobal holds information about the browser (User Agent)?",
        "options" => ["\$_SERVER", "\$_ENV", "\$_BROWSER", "\$_REQUEST"],
        "answer" => "\$_SERVER",
        "difficulty" => "Medium"
    ],
    [
        "id" => 39,
        "question" => "What does array_push expect as its first argument?",
        "options" => ["The value to add", "The array to add to", "The key for the value", "The size of the array"],
        "answer" => "The array to add to",
        "difficulty" => "Medium"
    ],
    [
        "id" => 40,
        "question" => "Which function joins array elements with a string?",
        "options" => ["split()", "implode()", "join()", "Both implode() and join()"],
        "answer" => "Both implode() and join()",
        "difficulty" => "Medium"
    ],
    [
        "id" => 41,
        "question" => "Which function splits a string into an array?",
        "options" => ["split()", "implode()", "explode()", "str_split()"],
        "answer" => "explode()",
        "difficulty" => "Medium"
    ],
    [
        "id" => 42,
        "question" => "How do you destroy a single session variable?",
        "options" => ["session_destroy()", "unset(\$_SESSION['var'])", "session_unset()", "remove(\$_SESSION['var'])"],
        "answer" => "unset(\$_SESSION['var'])",
        "difficulty" => "Medium"
    ],
    [
        "id" => 43,
        "question" => "What is the effect of using 'array_pop' on an array?",
        "options" => ["Removes the first element", "Removes the last element", "Sorts the array", "Adds a new element"],
        "answer" => "Removes the last element",
        "difficulty" => "Medium"
    ],
    [
        "id" => 44,
        "question" => "What is the effect of using 'array_shift' on an array?",
        "options" => ["Removes the first element", "Removes the last element", "Sorts the array", "Adds a new element"],
        "answer" => "Removes the first element",
        "difficulty" => "Medium"
    ],
    [
        "id" => 45,
        "question" => "Which function searches an array for a specific value and returns the key?",
        "options" => ["in_array()", "array_search()", "array_keys()", "find_in_array()"],
        "answer" => "array_search()",
        "difficulty" => "Medium"
    ],
    [
        "id" => 46,
        "question" => "In which superglobal is information about uploaded files stored?",
        "options" => ["\$_POST", "\$_FILES", "\$_UPLOAD", "\$_SERVER"],
        "answer" => "\$_FILES",
        "difficulty" => "Medium"
    ],
    [
        "id" => 47,
        "question" => "Which keyword is used to refer to a variable outside the current function scope?",
        "options" => ["extern", "global", "static", "outer"],
        "answer" => "global",
        "difficulty" => "Medium"
    ],
    [
        "id" => 48,
        "question" => "What is the purpose of the 'static' keyword in a function?",
        "options" => ["To prevent the function from being called", "To keep variable value between function calls", "To make it accessable from anywhere", "To speed up execution"],
        "answer" => "To keep variable value between function calls",
        "difficulty" => "Medium"
    ],
    [
        "id" => 49,
        "question" => "Which function checks if a file exists?",
        "options" => ["file_exists()", "is_file()", "check_file()", "exists()"],
        "answer" => "file_exists()",
        "difficulty" => "Medium"
    ],
    [
        "id" => 50,
        "question" => "How do you open a file for ONLY reading in PHP?",
        "options" => ["fopen('file.txt', 'w');", "fopen('file.txt', 'r');", "fopen('file.txt', 'a');", "open('file.txt');"],
        "answer" => "fopen('file.txt', 'r');",
        "difficulty" => "Medium"
    ],
    [
        "id" => 51,
        "question" => "What does the 'str_replace' function do?",
        "options" => ["Replaces occurances of a string", "Reverses a string", "Removes whitespace", "Counts characters"],
        "answer" => "Replaces occurances of a string",
        "difficulty" => "Medium"
    ],
    [
        "id" => 52,
        "question" => "Which function is used to redirect a user to a different page?",
        "options" => ["header()", "redirect()", "go()", "location()"],
        "answer" => "header()",
        "difficulty" => "Medium"
    ],
    [
        "id" => 53,
        "question" => "What happens if header('Location: ...') is called after outputting HTML?",
        "options" => ["It works normally", "It displays a warning and fails", "It works but is slow", "PHP crashes"],
        "answer" => "It displays a warning and fails",
        "difficulty" => "Medium"
    ],
    [
        "id" => 54,
        "question" => "Which character is used to separate statements in a 'for' loop?",
        "options" => [",", ";", ":", "|"],
        "answer" => ";",
        "difficulty" => "Medium"
    ],
    [
        "id" => 55,
        "question" => "How do you get the number of items in an associative array?",
        "options" => ["length()", "sizeof()", "count()", "Both count() and sizeof()"],
        "answer" => "Both count() and sizeof()",
        "difficulty" => "Medium"
    ],
    [
        "id" => 56,
        "question" => "What is the difference between '==' and '==='?",
        "options" => ["'===' checks only value", "'===' checks value and type", "There is no difference", "All are false"],
        "answer" => "'===' checks value and type",
        "difficulty" => "Medium"
    ],
    [
        "id" => 57,
        "question" => "Which function is used to sort an associative array in ascending order by VALUE?",
        "options" => ["asort()", "sort()", "ksort()", "arsort()"],
        "answer" => "asort()",
        "difficulty" => "Medium"
    ],
    [
        "id" => 58,
        "question" => "Which function is used to sort an associative array in ascending order by KEY?",
        "options" => ["asort()", "sort()", "ksort()", "krsort()"],
        "answer" => "ksort()",
        "difficulty" => "Medium"
    ],
    [
        "id" => 59,
        "question" => "What does the 'die()' function do?",
        "options" => ["Pauses the script", "Exits the script and outputs a message", "Restarts the server", "Deletes a variable"],
        "answer" => "Exits the script and outputs a message",
        "difficulty" => "Medium"
    ],
    [
        "id" => 60,
        "question" => "Which function is used to generate a random integer?",
        "options" => ["random()", "rand()", "gen()", "number()"],
        "answer" => "rand()",
        "difficulty" => "Medium"
    ],
    [
        "id" => 61,
        "question" => "What is \$_REQUEST composed of?",
        "options" => ["\$_GET and \$_POST", "\$_GET, \$_POST, and \$_COOKIE", "\$_SESSION and \$_POST", "\$_SERVER and \$_GET"],
        "answer" => "\$_GET, \$_POST, and \$_COOKIE",
        "difficulty" => "Medium"
    ],
    [
        "id" => 62,
        "question" => "How do you check if a file is readable?",
        "options" => ["is_readable()", "file_readable()", "can_read()", "check_read()"],
        "answer" => "is_readable()",
        "difficulty" => "Medium"
    ],
    [
        "id" => 63,
        "question" => "Which function converts a string to all UPPERCASE?",
        "options" => ["toupper()", "upper()", "strtoupper()", "case_upper()"],
        "answer" => "strtoupper()",
        "difficulty" => "Medium"
    ],
    [
        "id" => 64,
        "question" => "What is the purpose of the 'empty()' function?",
        "options" => ["Deletes a variable", "Checks if variable is set and 'empty' (0, '', null, false)", "Empties an array", "Clears the screen"],
        "answer" => "Checks if variable is set and 'empty' (0, '', null, false)",
        "difficulty" => "Medium"
    ],
    [
        "id" => 65,
        "question" => "Which escape character is used for a new line in a double-quoted string?",
        "options" => ["/n", "\\n", "/nl", "\\nl"],
        "answer" => "\\n",
        "difficulty" => "Medium"
    ],
    [
        "id" => 66,
        "question" => "What does '\$_SERVER['REQUEST_METHOD']' return?",
        "options" => ["The URL", "The protocol", "The method (GET/POST)", "The IP address"],
        "answer" => "The method (GET/POST)",
        "difficulty" => "Medium"
    ],
    [
        "id" => 67,
        "question" => "Which function is used to remove a file from the server?",
        "options" => ["remove()", "delete()", "unlink()", "rm()"],
        "answer" => "unlink()",
        "difficulty" => "Medium"
    ],

    // --- HARD (33) ---
    [
        "id" => 68,
        "question" => "What is the name of the magic method used as a constructor?",
        "options" => ["__construct()", "__init()", "__new()", "construct()"],
        "answer" => "__construct()",
        "difficulty" => "Hard"
    ],
    [
        "id" => 69,
        "question" => "Which keyword is used to prevent a class from being inherited?",
        "options" => ["static", "final", "private", "protected"],
        "answer" => "final",
        "difficulty" => "Hard"
    ],
    [
        "id" => 70,
        "question" => "What is an abstract class in PHP?",
        "options" => ["A class that cannot be instantiated", "A class with no methods", "A class with only static properties", "A public class"],
        "answer" => "A class that cannot be instantiated",
        "difficulty" => "Hard"
    ],
    [
        "id" => 71,
        "question" => "How do you access a static property or method from inside the same class?",
        "options" => ["\$this->", "self::", "static::", "Both self:: and static::"],
        "answer" => "Both self:: and static::",
        "difficulty" => "Hard"
    ],
    [
        "id" => 72,
        "question" => "What is a 'Trait' in PHP?",
        "options" => ["A type of array", "A mechanism for code reuse across different classes", "A special class variable", "A way to define constant arrays"],
        "answer" => "A mechanism for code reuse across different classes",
        "difficulty" => "Hard"
    ],
    [
        "id" => 73,
        "question" => "Which magic method is called when an object is used as a function?",
        "options" => ["__call()", "__invoke()", "__toFunction()", "__run()"],
        "answer" => "__invoke()",
        "difficulty" => "Hard"
    ],
    [
        "id" => 74,
        "question" => "What does PDO stand for in PHP?",
        "options" => ["PHP Data Objects", "PHP Database Option", "Pre-Database Object", "Packet Data Origin"],
        "answer" => "PHP Data Objects",
        "difficulty" => "Hard"
    ],
    [
        "id" => 75,
        "question" => "Which function is best for preventing SQL injection?",
        "options" => ["mysql_real_escape_string()", "htmlspecialchars()", "Using prepared statements with PDO/MySQLi", "strip_tags()"],
        "answer" => "Using prepared statements with PDO/MySQLi",
        "difficulty" => "Hard"
    ],
    [
        "id" => 76,
        "question" => "What is 'Late Static Binding'?",
        "options" => ["Binding variables at compile time", "Referencing the class called at runtime using static::", "A way to speed up class loading", "None of these"],
        "answer" => "Referencing the class called at runtime using static::",
        "difficulty" => "Hard"
    ],
    [
        "id" => 77,
        "question" => "What does the 'yield' keyword do in PHP?",
        "options" => ["Stops execution", "Defines a generator function", "Returns a value from a class", "Defines a trait"],
        "answer" => "Defines a generator function",
        "difficulty" => "Hard"
    ],
    [
        "id" => 78,
        "question" => "Which magic method is called when trying to access a non-existent property?",
        "options" => ["__set()", "__get()", "__call()", "__isset()"],
        "answer" => "__get()",
        "difficulty" => "Hard"
    ],
    [
        "id" => 79,
        "question" => "How do you define an anonymous function (closure)?",
        "options" => ["\$var = function() {};", "匿名 function() {};", "\$var = lambda();", "function \$var() {}"],
        "answer" => "\$var = function() {};",
        "difficulty" => "Hard"
    ],
    [
        "id" => 80,
        "question" => "What does the 'use' keyword do in a closure?",
        "options" => ["Imports a namespace", "Passes variables from parent scope into closure", "Defines a trait", "Inherits a class"],
        "answer" => "Passes variables from parent scope into closure",
        "difficulty" => "Hard"
    ],
    [
        "id" => 81,
        "question" => "What does 'null coalescing operator' (??) do?",
        "options" => ["Multiplies two values", "Returns first operand if it exists and is not null", "Checks if value is zero", "Concatenates strings"],
        "answer" => "Returns first operand if it exists and is not null",
        "difficulty" => "Hard"
    ],
    [
        "id" => 82,
        "question" => "What is the spaceship operator (<=>) used for?",
        "options" => ["Concatenation", "Combined comparison (-1, 0, or 1)", "Math operations", "Logical AND"],
        "answer" => "Combined comparison (-1, 0, or 1)",
        "difficulty" => "Hard"
    ],
    [
        "id" => 83,
        "question" => "Which keyword is used to catch a specific exception?",
        "options" => ["catch", "handle", "rescue", "trap"],
        "answer" => "catch",
        "difficulty" => "Hard"
    ],
    [
        "id" => 84,
        "question" => "What can follow a 'try' block?",
        "options" => ["Only catch", "Only finally", "Either catch or finally, or both", "Nothing"],
        "answer" => "Either catch or finally, or both",
        "difficulty" => "Hard"
    ],
    [
        "id" => 85,
        "question" => "How do you define a namespace in PHP?",
        "options" => ["namespace Name;", "use Name;", "pkg Name;", "module Name;"],
        "answer" => "namespace Name;",
        "difficulty" => "Hard"
    ],
    [
        "id" => 86,
        "question" => "What is an Interface in PHP?",
        "options" => ["A class with logic", "A contract specifying which methods a class must implement", "A graphical UI", "A database connection"],
        "answer" => "A contract specifying which methods a class must implement",
        "difficulty" => "Hard"
    ],
    [
        "id" => 87,
        "question" => "Which method is called when an object is cast to a string?",
        "options" => ["__cast()", "__toString()", "__print()", "__format()"],
        "answer" => "__toString()",
        "difficulty" => "Hard"
    ],
    [
        "id" => 88,
        "question" => "What is Reflection in PHP?",
        "options" => ["Mirroring a database", "Class/method discovery at runtime", "Reverse string function", "Garbage collection"],
        "answer" => "Class/method discovery at runtime",
        "difficulty" => "Hard"
    ],
    [
        "id" => 89,
        "question" => "Which function is used to securely register a custom autoloader?",
        "options" => ["__autoload()", "spl_autoload_register()", "register_autoloader()", "auto_load()"],
        "answer" => "spl_autoload_register()",
        "difficulty" => "Hard"
    ],
    [
        "id" => 90,
        "question" => "What does json_encode() return on success?",
        "options" => ["An array", "A JSON encoded string", "An object", "A boolean"],
        "answer" => "A JSON encoded string",
        "difficulty" => "Hard"
    ],
    [
        "id" => 91,
        "question" => "Which function is used to extract a slice of an array?",
        "options" => ["array_slice()", "array_splice()", "array_cut()", "array_part()"],
        "answer" => "array_slice()",
        "difficulty" => "Hard"
    ],
    [
        "id" => 92,
        "question" => "What is the result of 1 == '1' and 1 === '1'?",
        "options" => ["Both true", "Both false", "True, False", "False, True"],
        "answer" => "True, False",
        "difficulty" => "Hard"
    ],
    [
        "id" => 93,
        "question" => "Which function returns information about the variables passed to it in a readable format?",
        "options" => ["print_r()", "echo", "debug()", "show()"],
        "answer" => "print_r()",
        "difficulty" => "Hard"
    ],
    [
        "id" => 94,
        "question" => "What is the purpose of the 'finally' block?",
        "options" => ["To handle errors", "To exit the script", "To execute code after try/catch regardless of success", "To define final variables"],
        "answer" => "To execute code after try/catch regardless of success",
        "difficulty" => "Hard"
    ],
    [
        "id" => 95,
        "question" => "What does the 'instanceof' operator do?",
        "options" => ["Creates a new instance", "Checks if an object is an instance of a specific class", "Checks if a class exists", "Duplicates an object"],
        "answer" => "Checks if an object is an instance of a specific class",
        "difficulty" => "Hard"
    ],
    [
        "id" => 96,
        "question" => "Which function is used to set the internal pointer of an array to its first element?",
        "options" => ["start()", "first()", "reset()", "end()"],
        "answer" => "reset()",
        "difficulty" => "Hard"
    ],
    [
        "id" => 97,
        "question" => "What is the recommended function for hashing passwords securely?",
        "options" => ["md5()", "sha1()", "password_hash()", "crypt()"],
        "answer" => "password_hash()",
        "difficulty" => "Hard"
    ],
    [
        "id" => 98,
        "question" => "Which constant is used for the strongest hashing algorithm in password_hash()?",
        "options" => ["PASSWORD_BCRYPT", "PASSWORD_DEFAULT", "PASSWORD_MD5", "PASSWORD_SHA256"],
        "answer" => "PASSWORD_DEFAULT",
        "difficulty" => "Hard"
    ],
    [
        "id" => 99,
        "question" => "How do you check if a class property exists?",
        "options" => ["isset()", "property_exists()", "class_exists()", "has_property()"],
        "answer" => "property_exists()",
        "difficulty" => "Hard"
    ],
    [
        "id" => 100,
        "question" => "What is the purpose of 'serialize()'?",
        "options" => ["Encrypts data", "Converts a variable into a storable representation (string)", "Sorts data", "Splits data into multiple files"],
        "answer" => "Converts a variable into a storable representation (string)",
        "difficulty" => "Hard"
    ]
];
