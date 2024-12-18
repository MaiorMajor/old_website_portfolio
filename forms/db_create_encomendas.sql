CREATE TABLE IF NOT EXISTS purchase (
    id INTEGER PRIMARY KEY,
    name TEXT NOT NULL,
    email TEXT NOT NULL,
    name_produto TEXT NOT NULL,
    data_quantia TEXT NOT NULL,
    mensagem TEXT,
    data_hora DATETIME DEFAULT CURRENT_TIMESTAMP
);
