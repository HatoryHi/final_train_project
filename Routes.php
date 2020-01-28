<?php
Route::set('index.php', function () {
    Index::CreateView("Index");
});
Route::set('admin', function () {
    AdminPanel::CreateView("AdminPanel");
});
Route::set('edit', function () {
    Edit::CreateView("edit");
});
Route::set('add', function () {
    AdminPanel::CreateView("add");
});

