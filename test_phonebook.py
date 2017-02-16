from phonebook import Phonebook

def test_add_and_lookup_entry():
    phonebook = Phonebook()
    phonebook.add('Bob', '12345')
    assert '12345' == phonebook.lookup('Bob')

def test_phonebook_gives_access_to_names_and_numbers():
    phonebook = Phonebook()
    phonebook.add('Alice', '123')
    assert 'Alice' in phonebook.names()
    assert '123' in phonebook.numbers()
