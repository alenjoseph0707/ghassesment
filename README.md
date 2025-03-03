# 📄 GH Digital Media Pvt Ltd - WordPress Theme

This project is a **custom WordPress theme** built with **Bootstrap 4**, featuring a **responsive navigation menu**, a **custom blog post grid layout**, and a **hero section with the latest featured post**.

## 🌟 Features Implemented
✅ **Responsive Navigation Menu**
- Desktop menu converts into a mobile-friendly **hamburger menu**.
- **Smooth CSS transitions** for opening and closing the menu.
- **Bootstrap 4 used** for styling and responsiveness.

✅ **Hero Section with Featured Post**
- A **full-width hero section** that displays the latest blog post.
- Uses a **3-column grid layout** for improved UI/UX.

✅ **Custom Blog Post Grid Layout**
- **3-column layout** for the blog archive page using **CSS Grid / Flexbox**.
- **Latest post is highlighted** with a larger size and bold title.
- **Hover effects added** for each blog post card.
- **Responsive:** Adjusts to **1-column on mobile screens**.

---

## ⚠️ Issue: Blog Archive Page Not Completing
### ❌ Technical Reason:
The archive page is incomplete due to a **PHP server-side issue** that may be caused by one of the following reasons:
1. **Incorrect Loop or Query Issues**
   - The WordPress loop might not be fetching the correct posts.
   - A conflict in `WP_Query` parameters may be breaking the archive output.
  
2. **Server Configuration Limitations**
   - The server may have **memory limit constraints** or **execution timeout issues**, preventing the archive from loading correctly.
  
3. **Theme or Plugin Conflicts**
   - An active plugin or custom theme function may be interfering with the blog archive rendering.




