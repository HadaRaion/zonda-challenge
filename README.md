# Zonda Challenge - Employee Biography Template

This repository contains the code for the Zonda Challenge, which involves creating a custom employee biography template on a generic website using WordPress. The template allows administrators to enter employee information through Advanced Custom Fields (ACF) on the admin side and displays this information on the frontend in an ADA compliant manner.

## Requirements

To use this code, you need the following:

- WordPress installed on your server.
- Advanced Custom Fields (ACF) plugin installed and activated on your WordPress site.
- [Node.js](https://nodejs.org/)
- [@wordpress/scripts](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-scripts/)

## Installation

1. Clone the repository: git clone https://github.com/HadaRaion/zonda-challenge.git

2. Copy the entire repository folder into the `wp-content/themes/` directory of your WordPress installation.

3. Log in to your WordPress admin dashboard, navigate to "Appearance" -> "Themes," and activate the "Zonda Challenge" theme.

4. Install and activate the "Advanced Custom Fields" plugin if you haven't already.

### Setup

To start using all the tools you need to install the necessary Node.js and wordpress/scripts dependencies :

```sh
$ npm install
```

## How the Template Works

1. **Custom Fields for Employee Bio Template**: The template includes the following custom fields for the employee biography:

   - A) Employee Name : Text
   - B) Profile Image : Image
   - C) Position Title : Text
   - D) Division Title : Select
   - E) Optional Division Logo : Image
   - F) First day at Zonda : Date Picker
   - G) Bios : WYSIWYG Editor

2. **Creating Employee Biographies**:

   - Navigate to the WordPress admin dashboard.
   - Go to "Custom Fields" and create a new field group named "Employee Biography."
   - Add the custom fields corresponding to the bio template requirements using Advanced Custom Fields.
   - Set the Location Rules to show this field group if Post type is equal to Employee.
   - Save the field group.

3. **Template Display**:
   - The custom template is located in `single-employee.php`.
   - When you create a new employee post, fill in the custom fields with the relevant information.
   - The template will display the entered information on the frontend in a visually appealing manner.

### Available CLI commands

It comes packed with CLI commands tailored for WordPress theme development :

- `npm run start` : starts the build for development.
- `npm run build` : builds the code for production.

Now you're ready to go!
