<template>
  <div class="min-h-screen bg-gray-50 flex items-center justify-center p-6">
    <div class="w-full max-w-lg bg-white shadow-lg rounded-2xl p-8">
      <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">
        Envio de Currículo
      </h2>

      <form enctype="multipart/form-data" class="space-y-5">
        <!-- Nome -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Nome</label>
          <input
            type="text"
            required
            class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none"
          />
        </div>

        <!-- Email -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
          <input
            type="email"
            required
            class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none"
          />
        </div>

        <!-- Telefone -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Telefone</label>
          <input
            type="text"
            class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none"
          />
        </div>

        <!-- Cargo Desejado -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Cargo Desejado</label>
          <input
            type="text"
            required
            class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none"
          />
        </div>

        <!-- Escolaridade -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Escolaridade</label>
          <select
            required
            class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none"
          >
            <option value="">Selecione</option>
            <option>Ensino Fundamental</option>
            <option>Ensino Médio</option>
            <option>Ensino Superior</option>
            <option>Pós-graduação</option>
          </select>
        </div>

        <!-- Observações -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Observações</label>
          <textarea
            rows="3"
            class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none"
          ></textarea>
        </div>

        <!-- Arquivo -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Currículo (.pdf, .doc, .docx)</label>
          <input
            type="file"
            class="block w-full text-sm text-gray-600 file:mr-4 file:py-2 file:px-4 
                   file:rounded-lg file:border-0 file:text-sm file:font-semibold
                   file:bg-indigo-50 file:text-indigo-700
                   hover:file:bg-indigo-100"
          />
        </div>

        <!-- Botão -->
        <div class="pt-4">
          <button
            type="submit"
            class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm 
                   text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none 
                   focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 disabled:bg-gray-400"
          >
            Enviar
          </button>
        </div>
      </form>
    </div>
  </div>
</template>
