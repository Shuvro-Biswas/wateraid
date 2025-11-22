# WaterAid Bangladesh – Rainwater Convention 2025

**International Conference on Rainwater Harvesting & Sustainable Water Management**

**Live Demo:** https://drive.google.com/file/d/13ZOAk-oxqeHvzSvglJzYQxZ8IDMLaLEy/view?usp=sharing
**GitHub Repository:** https://github.com/Shuvro-Biswas/wateraid  
**Figma UI/UX Prototype:** https://www.figma.com/design/ydjrz5kOH80we2NHWPMXnm/wateraid  
1.https://www.figma.com/design/ydjrz5kOH80we2NHWPMXnm/wateraid?node-id=0-1&p=f&t=zL7DXGAVrfxkR04B-0 2.https://www.figma.com/design/ydjrz5kOH80we2NHWPMXnm/wateraid?node-id=0-1&p=f&t=zL7DXGAVrfxkR04B-0 3.https://www.figma.com/design/ydjrz5kOH80we2NHWPMXnm/wateraid?node-id=0-1&p=f&t=zL7DXGAVrfxkR04B-0
_(Invitation sent to: AfsanaIslam@wateraid.org & JabinFatema@wateraid.org)_

---

### Project Overview

A complete, production-ready conference management system built for **WaterAid Bangladesh** featuring:

-   Public Registration & Login System
-   Secure Admin Panel (View & Manage Participants)
-   Personal Profile Management (Edit Info + Change Password)
-   Fully Responsive Design (Mobile-First + Hamburger Menu)
-   Floating Toast Notifications (Success/Error)
-   Modern UI with Tailwind CSS
-   Built with Laravel 12 (Latest Standards)

---

### Live Preview

**Public Live Link:**  
https://drive.google.com/file/d/13ZOAk-oxqeHvzSvglJzYQxZ8IDMLaLEy/view?usp=sharing

**Admin Login Credentials:**

-   Email: `admin@rainwater.com`
-   Password: `admin123`

---

### Key Features

| Feature                  | Status | Description                              |
| ------------------------ | ------ | ---------------------------------------- |
| Free Public Registration | Done   | With validation & toast feedback         |
| Secure Authentication    | Done   | Laravel Breeze + Custom Middleware       |
| Admin Dashboard          | Done   | View, filter & delete participants       |
| User Profile Management  | Done   | Edit name, organization, phone, password |
| Floating Toast Alerts    | Done   | Auto-hide after 3 seconds                |
| Mobile Responsive        | Done   | Hamburger menu + compact layout          |
| Modern UI/UX             | Done   | Tailwind CSS + Figma-designed            |

---

### Tech Stack & Tools

| Category        | Technology Used                |
| --------------- | ------------------------------ |
| Framework       | Laravel 12 (Latest)            |
| Language        | PHP 8.3+, Blade Templates      |
| Frontend        | Tailwind CSS (CDN), Vanilla JS |
| Authentication  | Laravel Breeze + Custom Logic  |
| Database        | MySQL                          |
| Design Tool     | Figma (Full Prototype)         |
| Version Control | Git & GitHub                   |

---

### How to Run Locally (Full Setup Guide)

```bash
# 1. Clone the project
git clone https://github.com/Shuvro-Biswas/wateraid.git
cd wateraid

or,
(after extracting the zip file)
cd rainwater-convention (project-working-file)

# 2. Install dependencies
composer install

# 3. Setup environment
cp .env.example .env
php artisan key:generate

# 4. Configure Database (.env)
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=wateraid
DB_USERNAME=root
DB_PASSWORD=1234

# 5. Run migrations + seed admin
php artisan migrate --seed
# Admin: admin@rainwater.com / admin123

# 6. Start server
php artisan serve
```
