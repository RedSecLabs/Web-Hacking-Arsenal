''' page # 78,79,80'''

import time
import sqlite3
import subprocess
import requests

target = "http://demo-site.com"
def run_hakrawler(url):
    command = f"echo {url} | hakrawler -u | egrep -v '(\.js|\.css|\.png|\.jpg|\.gif)'"
    process = subprocess.Popen(command, shell=True,stdout=subprocess.PIPE, stderr=subprocess.PIPE)
    output, error = process.communicate()
    line = output.decode('utf-8')
    return line

def discord_notification(url):
    webhook = "[YOUR_DISCORD_WEBHOOK_LINK]"
    message = {"content": "New Endpoint Found: "+url}
    requests.post(webhook, json=message)

def main():
    conn = sqlite3.connect('hakrawler-out.db')
    cursor = conn.cursor()
    cursor.execute("'CREATE TABLE IF NOT EXISTS urls (column_name TEXT)'")
    sql = "INSERT INTO urls (column_name) VALUES (?)"
    urls = run_hakrawler(target).splitlines()
    for url in urls:
        if target in url:
            cursor.execute("SELECT * FROM urls WHERE column_name = ?", (url,))
            existing_data = cursor.fetchone()
            if not existing_data:
                cursor.execute(sql, (url,))
            if counter != 1:
                discord_notification(url)
                conn.commit()
                conn.close()
                counter = 0
            
    while True:
        counter = counter + 1
        main()
        time.sleep(24 * 60 * 60)
