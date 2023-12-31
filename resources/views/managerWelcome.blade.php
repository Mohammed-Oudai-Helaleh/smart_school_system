<h2>You are a manager</h2>
<form method="POST" action="{{ route('logout') }}">
    @csrf

    <button type="submit" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
        {{ __('Log Out') }}
    </button>
</form>
<h1>Management</h1>
<a href="/teachers">
    <button>Manage teachers</button>
</a>
<br>
<br>
<br>
<a href="/students">
    <button>Manage students</button>
</a>
<br>
<br>
<br>
<a href="/classrooms">
    <button>Manage class rooms</button>
</a>