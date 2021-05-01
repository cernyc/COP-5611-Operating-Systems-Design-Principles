import smtplib

server = smtplib.SMTP_SSL('smtp.gmail.com', 465)
server.login("testchakibcerny@gmail.com", "Ineed4nA")
server.sendmail("testchakibcerny@gmail.com", "chakib.cerny@gmail.com", "Memory alert ! empty owncloud !")
server.quit()
