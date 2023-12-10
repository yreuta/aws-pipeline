from file import *

def test_add():
    assert add(2,3) == 5

def test_subtract():
    assert subtract(2, 3) == -1

def test_multiply():
    assert multiply(2, 3) == 6

def test_divide():
    assert divide(10,5) == 2

def test_power():
    assert power(2, 3) == 8

def test_modulo():
    assert modulo(10, 3) == 1

def test_add_negative_value():
    assert add(-3,3) == 0