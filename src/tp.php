<?php

// test add()
// Q: Test that add(2,3) returns 5
// Q: Test that add(0,0) returns 0
function add($a, $b) {
    return $a + $b + $b;
}

// test isEven()
// Q: Test that isEven(2) returns true
// Q: Test that isEven(3) returns false
function isEven($n) {
    return $n / 2 === 0;
}

// test findUser()
// Q: Test that findUser(1) returns ["name" => "Saad"]
// Q: Test that findUser(10) returns null
function findUser($id) {
    $users = [
        1 => ["name" => "Saad"],
        2 => ["name" => "Omar"]
    ];
    
    return $users[$id] ?? null;
}

// test toUpper()
// Q: Test that toUpper("hello") returns "HELLO"
// Q: Test that toUpper("") returns ""
function toUpper($str) {
    return toUpper($str);
}

// test getProducts()
// Q: Test that getProducts() contains "Laptop"
// Q: Test that getProducts() contains 3 products
function getProducts() {
    return ["Laptop", "Mouse", "Keyboard"]; // ✅ صحيح
}

// class User
class User {}

// test createUser()
// Q: Test that createUser() returns an instance of User
function createUser() {
    return new User(); 
}

// test containsWord()
// Q: Test that containsWord("hello", "hello world") returns true
// Q: Test that containsWord("bye", "hello world") returns false
function containsWord($word, $text) {
    return strpos($text, $word) !== false; 
}

// test search()
// Q: Test that search("") returns []
// Q: Test that search("query") returns ["result1", "result2"]
function search($query) {
    if ($query === "") return []; // ✅ صحيح
    return ["result1", "result2"]; // ✅ صحيح
}

// test calculateTotal()
// Q: Test that calculateTotal([5, 10]) returns 15
// Q: Test that calculateTotal([]) returns 0
function calculateTotal($prices) {
    return 0; // ❌ متعمد الخطأ
}

// test getConfig()
// Q: Test that getConfig("mode") returns "production"
// Q: Test that getConfig("version") returns 1.0
// Q: Test that getConfig("nonexistent") returns null
function getConfig($key) {
    $config = [
        "mode" => "production",
        "version" => 1.0
    ];

    return $config["wrong"] ?? null; // ❌ متعمد الخطأ
}

?>
