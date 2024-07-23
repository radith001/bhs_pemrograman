import sqlite3

conn = sqlite3.connect('example.db')

c = conn.cursor()

c.execute('''
CREATE TABLE IF NOT EXISTS users (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT NOT NULL,
    age INTEGER NOT NULL
)
''')

c.execute('''
INSERT INTO users (name, age) VALUES
('Alice', 30),
('Bob', 25),
('Charlie', 35)
''')

c.execute('SELECT * FROM users')
rows = c.fetchall()

for row in rows:
    print(row)

conn.commit()
conn.close()
