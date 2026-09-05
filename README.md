# <img src="docs/assets/logo.svg" alt="logo" width="30"/> Recipe Cloud

**Recipe Cloud** is a self-hosted collaborative recipe app for managing and sharing recipes with friends and family.


<!--Add fancy readme content here-->

## Features
<details>
<summary>Full feature list</summary>

### Access levels

Recipe Cloud is self-hosted and account-based: almost everything requires logging in. The one exception is a public, read-only share link an account holder can generate for a single recipe.

**Without an account**
- Open a recipe via a public share link and view it (ingredients, steps, images) — read only, no account prompts, no interaction

**With an account**
- Everything else: manage your personal recipe library, join or create households, share recipes with specific users or households, generate public share links, use AI import/enhancement, plan meals, build shopping lists, use cooking mode, and so on



### 🍲 Recipes (planned)

- Create, edit, duplicate, archive, and delete recipes
- Organize recipes with tags, categories, cuisines, and favorites
- Add preparation time, cooking time, servings, difficulty, cuisine, and nutritional information
- Add ingredients and steps, including images, videos, and notes
- Import recipes automatically from websites that publish structured recipe data (schema.org/Recipe)

### 🍽️ Cooking (planned)

- Add an image or short video to every recipe step
- Use a distraction-free step-by-step cooking mode
- Keep the screen awake while cooking
- Scale ingredient quantities automatically by serving size
- Convert units between metric, imperial, volume, and weight
- Support timers directly inside recipe steps

### 📅 Optional Planning (planned)
- Build weekly meal plans from saved recipes
- Generate and share shopping lists automatically
- Combine ingredients from multiple recipes and group them by store section
- Export shopping lists to other apps

### 🤖 AI (planned)

- Import recipes from a websites, Instagram/TikTok/Yourube videos, or unstructured/pasted text using AI parsing
- Use AI to enhance existing recipes: steps, tags, nutritional analysis, and so on
- Automatically link ingredients to the steps that use them
- Support multiple AI providers, configurable instance-wide
- iOS App dirketly appering in the share sheet to import recipes from other apps

### 👥 Collaboration & sharing (planned)

- Every recipe belongs to a personal library by default
- Create or join one or more households; household members share access to that household's recipe collection
- Share an individual recipe directly with another specific logged-in user, without a shared household
- Set permissions for viewing, editing, and managing recipes within a household
- Generate a read-only public link for a single recipe so anyone can view it without an account — there is no public, browsable recipe library
- See who created or last updated a recipe

### 📱 Access & personalization (planned)

- Search recipes by title, ingredient, tag, or dietary preference
- Use the app on mobile, tablet, and desktop
- Work offline and synchronize changes when back online
- Export recipes as PDF (Print), Markdown, or JSON
- Generate a full cookbook PDF with all recipes in a household or personal library
- Import and export a complete recipe library for backups and other apps
- Support multiple languages

### ⚙️ Accounts & administration (planned)

- Sign up with email & password/passkey (or OAuth)
- Instance admin chooses whether registration is open to anyone or invite/admin-only
- Reset password via email
- Admin panel: manage user accounts (invite, disable, delete), oversee households and revoke public links, configure instance-wide settings (registration mode, AI provider/keys, default language)
- optional 2FA and passkey login, admin-togglable per instance

</details>

#novibecode