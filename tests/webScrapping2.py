#Saúl Enrique Labra Cruz A01020725

from selenium import webdriver
from selenium.webdriver.common.keys import Keys
import time
import logging
import threading

def thread_function(name):
    logging.info("Thread %s: starting", name)
    
    

    logging.info("Thread %s: finishing", name)

logging.info("Main    : before creating thread")
x = threading.Thread(target=thread_function, args=(1,))
logging.info("Main    : before running thread")
x.start()
logging.info("Main    : wait for the thread to finish")
# x.join()
logging.info("Main    : all done")

browser = webdriver.Firefox(executable_path=r'./geckodriver')
browser.get("http://34.102.217.179")

#Login - Profesor
elem = browser.find_element_by_xpath('//a[@href="'+ 'login_profesor.php' +'"]')
elem.click()
elem = browser.find_element_by_id('inputEmail')
elem.send_keys("0976549")
elem = browser.find_element_by_id('inputPassword')
elem.send_keys("contraseña4")
elem = browser.find_element_by_xpath("//input[@type='submit']")
elem.click()

#Materias
elem = browser.find_element_by_name("IZT78")
elem.click()

#Alumnos
elem = browser.find_element_by_xpath("/html/body/div/form[1]/div/div[4]/input")
elem.send_keys(85)
elem = browser.find_element_by_xpath("/html/body/div/form[1]/div/div[5]/input")
elem.send_keys(90)
elem = browser.find_element_by_xpath("/html/body/div/form[1]/div/div[6]/input")
elem.send_keys(100)
elem = browser.find_element_by_name("A01023212")
elem.click()

#return to user selection
i = 0
while i < 5:
    browser.execute_script("window.history.go(-1)")
    i += 1

time.sleep(2)

#Login - Alumno
elem = browser.find_element_by_xpath('//a[@href="'+ 'login_alumno.php' +'"]')
elem.click()
elem = browser.find_element_by_name('matricula')
elem.send_keys("A01336418")
elem = browser.find_element_by_id('inputPassword')
elem.send_keys("password")
elem = browser.find_element_by_xpath("//input[@type='submit']")
elem.click()

time.sleep(1)
#browser.close()