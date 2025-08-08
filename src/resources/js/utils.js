export const menuItems = [
    {
        name: "Главная",
        href: "/",
    },
    {
        name: "Бренды",
        href: "/brands",
    },
    {
        name: "Каталог",
        href: "/catalog/rasprodaza",
    },
    {
        name: "Аренда",
        href: "/rental",
    },
    {
        name: "Сервис",
        href: "/service",
    },
    {
        name: "Новости",
        href: "/news",
    },
    {
        name: "О компании",
        href: "/about",
    },
    {
        name: "Контакты",
        href: "/contacts",
    },
];

// Функция определения активной страницы
export const isActivePage = (href) => {
    if (href === "#") return false;
    // Для главной страницы проверяем точное совпадение
    if (href === "/") {
        return window.location.pathname === href;
    }
    // Для остальных страниц проверяем, начинается ли путь с href
    return window.location.pathname.startsWith(href);
};
