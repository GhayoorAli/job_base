# JobScout Job Board Platform

A comprehensive WordPress-based job board platform that enables employers to post job listings and job seekers to browse and apply for positions. Built with WordPress, featuring custom registration functionality, user profiles, and role-based access control.

## ✨ Features

- **Dual User Registration System**: Separate registration flows for Employers and Job Seekers (Employees)
- **Custom User Profiles**: Dedicated profile pages for both user types
- **JobScout Theme Integration**: Built on the JobScout WordPress theme with custom child theme
- **Database Extensions**: Custom user type and user details fields
- **Form Integration**: Compatible with Forminator and User Registration plugins
- **Role-Based Access**: Different user experiences based on user type (Employer/Employee)
- **WordPress Integration**: Full compatibility with WordPress ecosystem and plugins

## 🎨 Custom Components

### JobScout Registration Plugin

**Location**: `wp-content/plugins/jobscout-registration/`

**Features**:
- Custom user registration form
- User type selection (Employer/Employee)
- Password validation (minimum 8 characters)
- Email uniqueness validation
- Automatic page creation (Registration and Profile pages)
- Database schema modifications

**Main Class**: `Registration`
- `registrationForm()`: Displays the registration form
- `processRegistrationForm()`: Handles form submission and user creation

### JobScout Child Theme

**Location**: `wp-content/themes/jobscout-child/`

**Features**:
- Inherits styles from parent JobScout theme
- Custom page templates for Registration and Profile
- Login redirect functionality
- Custom styling support

**Page Templates**:
- `registration-page.php`: Registration page template
- `page-templates/profile-page.php`: User profile page template

## 💻 Usage

### User Registration

1. Navigate to `/registration` page
2. Select user type (Employer or Employ)
3. Fill in the registration form:
   - Name
   - Email (must be unique)
   - Password (minimum 8 characters)
   - Confirm Password
4. Click "Join" to register

### User Login

1. Users can log in using WordPress default login or User Registration plugin
2. After successful login, users are redirected to the Profile page
3. Profile page displays user information based on user type

### Admin Functions

- Manage users through WordPress admin panel
- View user types in the database
- Customize registration and profile pages through page templates

**Ghayoor Ali**

- Plugin Author: Ghayoor Ali
- For support, please contact the development team

