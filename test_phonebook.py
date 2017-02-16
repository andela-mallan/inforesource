from phonebook import Phonebook
import pytest

@pytest.fixture
def phonebook(request):
    phonebook = Phonebook()
    def clearup_phonebook():
        phonebook.cleanUp()
    request.addfinalizer(clearup_phonebook)
    return phonebook

def test_add_and_lookup_entry(phonebook):
    phonebook.add('Bob', '12345')
    assert '12345' == phonebook.lookup('Bob')

def test_phonebook_gives_access_to_names_and_numbers(phonebook):
    phonebook.add('Alice', '123')
    assert 'Alice' in phonebook.names()
    assert '123' in phonebook.numbers()

def test_missing_entry_raises_KeyError(phonebook):
    with pytest.raises(KeyError):
        phonebook.lookup('missing')
