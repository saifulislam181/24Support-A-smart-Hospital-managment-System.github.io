from selenium import webdriver
from webdriver_manager.chrome import ChromeDriverManager
from selenium.webdriver.common.keys import Keys
import time

driver = webdriver.Chrome(ChromeDriverManager().install())
driver.get("http://localhost/24support/blooddonation.php")
#print(driver.title)
time.sleep(3)
name = driver.find_element_by_xpath('//*[@id="form"]/form/input[1]')
email = driver.find_element_by_xpath('//*[@id="form"]/form/input[2]')
phone = driver.find_element_by_xpath('//*[@id="form"]/form/div[2]/div[1]/input')
address = driver.find_element_by_xpath('//*[@id="form"]/form/div[2]/div[2]/input')
blood group= driver.find_element_by_xpath('//*[@id="form"]/form/div[3]/div[1]/select')
last date of donation = driver.find_element_by_xpath('//*[@id="form"]/form/div[3]/div[2]/input')

time.sleep(3)


name.send_keys("Joyshree sarkar")
email.send_keys("sarkar@gmail.com")
phone.send_keys("0123654889")
address.send_keys("Dhaka,Bangladesh")
blood group.send_keys("A-")
last date of donation.send_keys("12 14 13")

time.sleep(3)
button = driver.find_element_by_xpath('//*[@id="btnGetData"]')
button.click()


while True:
	pass