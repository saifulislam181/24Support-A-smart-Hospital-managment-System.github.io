from selenium import webdriver
from webdriver_manager.chrome import ChromeDriverManager
from selenium.webdriver.common.keys import Keys
import time

driver = webdriver.Chrome(ChromeDriverManager().install())
driver.get("http://localhost/24support/doctorappoinment.php")
#print(driver.title)
time.sleep(3)
name = driver.find_element_by_xpath('/html/body/div[3]/div/form/div[2]/input[1]')
email = driver.find_element_by_xpath('/html/body/div[3]/div/form/div[2]/input[2]')
cat = driver.find_element_by_xpath('/html/body/div[3]/div/form/div[2]/input[3]')
drname = driver.find_element_by_xpath('/html/body/div[3]/div/form/div[2]/input[4]')
phone = driver.find_element_by_xpath('/html/body/div[3]/div/form/div[2]/input[5]')
des = driver.find_element_by_xpath('/html/body/div[3]/div/form/div[2]/textarea')
time.sleep(3)


name.send_keys("Saiful Islam")
email.send_keys("saif@gmail.com")
cat.send_keys("Phycology")
drname.send_keys("Dr Ayesha")
phone.send_keys("01732264028")
des.send_keys("I feel I can not remember anything also I did not kno anyone")

time.sleep(3)
button = driver.find_element_by_xpath('//*[@id="btnGetData"]')
button.click()


while True:
	pass