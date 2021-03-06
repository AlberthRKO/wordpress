<h3>
    Настройка переключателей (тоглов)
</h3>

<p>
    RD Navbar содержит очень удобную систему переключателей, которые можно применять в различных ситуациях, например, в
    случае, когда необходимо показывать/скрывать меню навигации или поиск, или любой другой элемент навбара.
</p>

<p>
    Для создания переключателя необходимо воспользоваться следующей разметкой
</p>

<code>
<pre>
...
   &lt;button data-rd-navbar-toggle=".element-1, #element-2, [data-type='element-3']."&gt;&lt;/button&gt;
...
</pre>
</code>

<p>
    , где data-rd-navbar-toggle содержит самый обычный css селектор элементов, для которых необходим переключатель.
</p>

<p>
    При активации переключателя, на элемент навешивается класс .active, что позволяет выполнять различные манипуляции с ним:
    двигать, скрывать, отображать, увеличивать и т.д.
</p>

<p>
    Так, например, в демо, переключатели используются для отображения/скрытия меню, корзины, поиска и дропдауна с дополнительными
    ссылками.
</p>
