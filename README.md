## Este projeto implementa uma formulário para submissão de currículos
## ▶️ Como Rodar

1. Clone o repositório e entre na pasta:
   ```bash
   git clone https://github.com/MiqueiasBelarmino/paytour-test.git
   cd paytour-test
   ```

2. Crie o `.env` conforme instruções (dentro da pasta backend).
    ```
    DB_CONNECTION=mysql
    DB_HOST=localhost
    DB_PORT=3306
    DB_DATABASE=paytour_db
    DB_USERNAME=root
    DB_PASSWORD=root
    ```
3. Suba os containers (dentro da pasta backend):
   ```bash
   docker-compose up -d
   ```

4. Execute as migrations (dentro da pasta backend):
   ```bash
   php artisan migrate
   ```
5. Instalar as dependências (dentro da pasta frontend):
   ```bash
   npm install
   ```
6. Iniciar os projetos:
   ```bash
   php artisan serve # na pasta backend
   npm run dev # na pasta frontend
   ```

5. Acesse:
   - API: [http://localhost:8000/api/submissions](http://localhost:8000/api/submissions)
   - Frontend: [http://localhost:5173](http://localhost:5173) (observar a porta na execução)

---

## Exemplo de Requisição
curl --location --request GET 'http://localhost:8000/api/submissions/' \
--form 'name="Miquéias Belarmino"' \
--form 'email="miqueiascostabac@gmail.com"' \
--form 'phone="18996514709"' \
--form 'desired_role="Desenvolvedor PHP Pleno"' \
--form 'schooling="Superior Completo"' \
--form 'observations="Disponível imediatamente"' \
--form 'file=@"/C:/Users/Miquéias/Documents/Candidaturas/2025/Curriculo_MiqueiasBelarmino.pdf"'
