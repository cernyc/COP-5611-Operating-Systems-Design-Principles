import smtplib
import ssl
import sys


args = sys.argv
print(args[1])
smtp_server = "smtp.gmail.com"
port = 587  # For starttls
sender_email = "testchakibcerny@gmail.com"
receiver_email = "chakib.cerny@gmail.com"
password = 'Ineed4nA'
if (args[1] == 'down'):
    message = "Server is down, do not move files to folder"
if (args[1] == 'up'):
    message = "Server is back up, files can be uploaded"

# Create a secure SSL context
context = ssl.create_default_context()

server = smtplib.SMTP(smtp_server,port)
server.ehlo() # Can be omitted
server.starttls(context=context) # Secure the connection
server.ehlo() # Can be omitted
server.login(sender_email, password)
server.sendmail(sender_email, receiver_email, message)
server.quit()
