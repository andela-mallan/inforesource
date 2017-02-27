import unittest
from alarm import Alarm

class AlarmTest(unittest.TestCase):

    def test_alarm_is_off_by_default(self):
        self.alarm = Alarm()
        self.assertFalse(self.alarm.is_alarm_on)

    def test_low_pressure_sounds_alarm(self):
        self.alarm = Alarm(sensor=TestSensor(15))
        self.alarm.check()
        self.assertTrue(self.alarm.is_alarm_on)

    def test_high_pressure_sounds_alarm(self):
        self.alarm = Alarm(sensor=TestSensor(25))
        self.alarm.check()
        self.assertTrue(self.alarm.is_alarm_on)

    def test_normal_pressure_doesnot_sound_alarm(self):
        self.alarm = Alarm(sensor=TestSensor(20))
        self.alarm.check()
        self.assertFalse(self.alarm.is_alarm_on)

class TestSensor:
    """
    This class is an example of a test stub. A stub is any test double
    with simple implementation and has no logic. You use it when the class
    you want to test has a collaborator that is inconvenient to use in the
    test and it helps you control the exact value the collaborating object
    returns. In this case the Sensor class is the collaborator.
    """
    def __init__(self, pressure):
        self.pressure = pressure

    def sample_pressure(self):
        return self.pressure

if __name__ == '__main__':
    unittest.main()
