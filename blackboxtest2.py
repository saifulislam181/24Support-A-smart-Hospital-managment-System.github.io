from selenium import webdriver
from webdriver_manager.chrome import ChromeDriverManager
from selenium.webdriver.common.keys import Keys
import time

driver = webdriver.Chrome(ChromeDriverManager().install())
driver.get("http://localhost/24support/24Support-SE-LAb-/moneydonarlist.php")
#print(driver.title)
time.sleep(3)
delete = driver.find_element_by_xpath('/html/body/table/tbody/tr[6]/td[7]/a')
delete.click()
time.sleep(3)
back = driver.find_element_by_xpath('/html/body/font/a')
back.click()



while True:
	pass