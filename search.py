from selenium import webdriver
from webdriver_manager.chrome import ChromeDriverManager
from selenium.webdriver.common.keys import Keys
import time

driver = webdriver.Chrome(ChromeDriverManager().install())
driver.get("http://localhost/24support/requestlist.php")
#print(driver.title)
time.sleep(3)
searce = driver.find_element_by_xpath('//*[@id="head"]/div/a[1]')
searce.click()

time.sleep(3)
phone = driver.find_element_by_xpath('//*[@id="search"]')
phone.send_keys("01732264028")

while True:
	pass