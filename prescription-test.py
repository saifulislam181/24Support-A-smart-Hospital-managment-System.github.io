from selenium import webdriver
from webdriver_manager.chrome import ChromeDriverManager
from selenium.webdriver.common.keys import Keys
import time

driver = webdriver.Chrome(ChromeDriverManager().install())

driver.get("http://localhost/nagorikapps/doctor-prescription.php")


name = driver.find_element_by_name('name').send_keys("sabbir")
age = driver.find_element_by_name('age').send_keys("24")
gender = driver.find_element_by_name('gender').send_keys("Male")
phone = driver.find_element_by_name('phone').send_keys("01881138519")
bloodGroup = driver.find_element_by_name('bloodGroup').send_keys("A+")
medicine = driver.find_element_by_name('medicine').send_keys("Napa")
save = driver.find_element_by_name("save").click()

time.sleep(5)

print("Successfully Inserted Data")