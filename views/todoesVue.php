<!DOCTYPE html>
<html>
<head>
    <title>TodoMVC</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
</head>
<body>
<section class="todoapp">
    <header class="header">
        <h1>Задачи</h1>
<!--        <form action="http://localhost:8080/TodoesController" method="get">-->
            <input class="new-todo"
                   autofocus autocomplete="off"
                   placeholder="Какую задачу хотите добавить?"
                   v-model="newTodo"
                   @keyup.enter="addTodo"/>
<!--        </form>-->
    </header>
    <footer class="footer" v-show="todos.length" v-cloak>
        <span class="todo-count">
          <strong>{{ remaining }}</strong> {{ remaining | pluralize }} добавлено
        </span>
        <ul class="filters">
            <li>
                <a href="#/all" :class="{ selected: visibility == 'all' }">Все</a>
            </li>
            <li>
                <a href="#/active" :class="{ selected: visibility == 'active' }">Активные</a>
            </li>
            <li>
                <a href="#/completed" :class="{ selected: visibility == 'completed' }">Выполненные</a>
            </li>
        </ul>
        <button class="clear-completed" @click="removeCompleted"
                v-show="todos.length>remaining">Отчистить выполненные
        </button>
    </footer>
    <section class="main" v-show="todos.length" v-cloak>
        <input id="toggle-all"
               class="toggle-all"
               type="checkbox"
               v-model="allDone"/>
        <label for="toggle-all"></label>
        <ul class="todo-list">
            <li v-for="todo in filteredTodos" class="todo" :key="todo.id"
                :class="{ completed: todo.completed, editing: todo == editedTodo }">
                <div class="view">
                    <input class="toggle"
                           type="checkbox"
                           v-model="todo.completed" />
                    <label id="todo" @dblclick="editTodo(todo)">{{ todo.title }}</label>
                    <button class="destroy" @click="removeTodo(todo)"></button>
                </div>
                <input class="edit"
                       type="text"
                       v-model="todo.title"
                       v-todo-focus="
                       todo == editedTodo"
                       @blur="doneEdit(todo)"
                       @keyup.enter="doneEdit(todo)"
                       @keyup.esc="cancelEdit(todo)"/>
            </li>
        </ul>
    </section>
</section>
<script>
    <?php
    include 'scripts/script.js'
    ?>
</script>
<style>
    <?php
        include 'css/todoesVue.css'
    ?>
</style>
</body>
</html>