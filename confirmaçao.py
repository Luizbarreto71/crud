import smtplib
from email.mime.multipart import MIMEMultipart
from email.mime.text import MIMEText

def enviar_email_confirmacao(email_destinatario,nome_usuario):

    smtp_server = 'smtp.gmail.com'
    port = 587
    email_remetente = 'feitosabarreto50@gmail.com'
    senha = '333'
