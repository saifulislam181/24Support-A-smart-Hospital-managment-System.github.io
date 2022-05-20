from selenium import webdriver
from webdriver_manager.chrome import ChromeDriverManager
from selenium.webdriver.common.keys import Keys
import time

driver = webdriver.Chrome(ChromeDriverManager().install())

driver.get("http://localhost/nagorikapps/available-bed.php")


floor = driver.find_element_by_name('floor').send_keys("4")
block = driver.find_element_by_name('block').send_keys("D")
room = driver.find_element_by_name('room').send_keys("402")
bed = driver.find_element_by_name('bed').send_keys("12D")
save = driver.find_element_by_name("save").click()

time.sleep(5)

print("Successfully Inserted Data")
