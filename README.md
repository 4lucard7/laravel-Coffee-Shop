# ☕ Coffee Shop

**Coffee Shop** is a simple project built with **Laravel**, **Blade**, and **CSS**.  
The project is meant for learning Laravel basics: routes, controllers, views, layouts, and Blade templates.

---

## 🚀 Features

- 🏠 Home page with welcome section and call-to-action
- ☕ Coffee Menu page with grid layout
- ℹ️ About Coffee Shop page with company story
- 📧 Contact page with styled form
- 🎨 Single responsive layout for all pages
- 🧭 Shared Navbar and Footer components
- 📋 Dynamic list of coffees (array)
- 🔗 Named routes for easy linking in Blade
- 📱 Fully responsive design (mobile-friendly)
- ✨ Modern UI with smooth animations

---

## 🗂️ Project Structure

```
coffeeshop/
├── app/
│   └── Http/Controllers/
├── public/
│   └── images/              # Coffee images
├── resources/
│   ├── css/
│   │   └── app.css         # Main stylesheet
│   ├── js/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php      # Main layout
│       ├── partials/
│       │   ├── navbar.blade.php   # Navigation bar
│       │   └── footer.blade.php   # Footer
│       ├── home.blade.php         # Home page
│       ├── menu.blade.php         # Menu page
│       ├── about.blade.php        # About page
│       └── contact.blade.php      # Contact page
├── routes/
│   └── web.php             # Application routes
├── vite.config.js
├── package.json
└── composer.json
```

---

## ⚡ Installation

1. **Clone the repository:**
   ```bash
   git clone https://github.com/4lucard7/laravel-Coffee-Shop.git
   cd laravel-Coffee-Shop
   ```

2. **Install PHP dependencies:**
   ```bash
   composer install
   ```

3. **Install NPM dependencies:**
   ```bash
   npm install
   ```

4. **Copy environment file:**
   ```bash
   cp .env.example .env
   ```

5. **Generate application key:**
   ```bash
   php artisan key:generate
   ```

6. **Build assets (CSS / JS):**
   ```bash
   npm run dev
   ```
   
   Or for production:
   ```bash
   npm run build
   ```

7. **Run Laravel development server:**
   ```bash
   php artisan serve
   ```

---

## 📝 Usage

Access the site at: **http://127.0.0.1:8000/**

### Available Pages:

| Route | Page | Description |
|-------|------|-------------|
| `/` | Home | Welcome page with featured content |
| `/menu` | Menu | Coffee menu with grid layout |
| `/about` | About | Company story and values |
| `/contact` | Contact | Contact information and form |

---

## 🎨 Design Features

- **Warm Color Palette**: Coffee-themed browns, creams, and gold accents
- **Gradient Backgrounds**: Modern gradient styling for header/footer
- **Smooth Animations**: Hover effects on buttons, cards, and links
- **Responsive Grid**: Menu items display in adaptive grid layout
- **Card Design**: Clean content cards with shadows and hover effects
- **Sticky Navigation**: Navigation bar stays visible while scrolling
- **Contact Form**: Fully styled form with focus states

---

## 💡 Notes

- Images are located in `public/images/`
- Routes are **named** for easier linking (e.g., `route('home')`)
- Main layout is `resources/views/layouts/app.blade.php`
- Blade templates use `@extends`, `@section`, and `@include`
- CSS is compiled via Vite from `resources/css/app.css`
- No database required - coffee data stored in array

---

## 🛠️ Technologies Used

- **PHP** 8+
- **Laravel** 10+
- **Blade** templates
- **CSS3** (Custom styling)
- **Vite** for asset bundling
- **Responsive** design principles

---

## 📸 Screenshots

### Home Page
Welcome section with featured content and call-to-action buttons.

### Menu Page
Grid layout displaying all coffee options with images, descriptions, and prices.

### About Page
Company story, values, and mission statement.

### Contact Page
Contact information, opening hours, and message form.

---

## 🔧 Customization

### Change Colors
Edit `resources/css/app.css` and modify these values:
- Primary brown: `#3e2723`, `#5d4037`
- Accent gold: `#ffca28`
- Text color: `#2c1810`
- Background: `#f9f5f0`

### Add More Coffees
Edit the `$coffees` array in `routes/web.php`:
```php
[
    'name' => 'Your Coffee',
    'description' => 'Description here',
    'price' => 25,
    'image' => 'images/your-coffee.jpg'
]
```

### Modify Layout
Edit `resources/views/layouts/app.blade.php` to change the overall structure.

---

## 🐛 Troubleshooting

**CSS not loading?**
- Make sure Vite is running: `npm run dev`
- Clear browser cache
- Check browser console for errors

**Images not showing?**
- Place images in `public/images/` folder
- Use correct path: `{{ asset('images/filename.jpg') }}`

**Routes not working?**
- Clear route cache: `php artisan route:clear`
- Check route names match in views

---

## 📄 License

This project is open-source and available under the [MIT License](LICENSE).

---

## 👤 Author

**4lucard7**
- GitHub: [@4lucard7](https://github.com/4lucard7)

---

## 🤝 Contributing

Contributions, issues, and feature requests are welcome!  
Feel free to check the [issues page](https://github.com/4lucard7/laravel-Coffee-Shop/issues).

---

## ⭐ Show your support

Give a ⭐️ if this project helped you learn Laravel!

---

**Happy Coding! ☕**
