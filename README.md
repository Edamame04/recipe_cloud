<div align="center">

<picture>
  <source media="(prefers-color-scheme: dark)" srcset="docs/assets/logo-light.svg" />
  <source media="(prefers-color-scheme: light)" srcset="docs/assets/logo.svg" />
  <img src="docs/assets/logo.svg" alt="Recipe Cloud" height="72" />
</picture>

<h1>Recipe Cloud</h1>

**A self-hosted recipe manager for your kitchen – with households, AI-assisted import and colaboration with friends and family.**

<!-- TODO: once there's a CI workflow, Docker image, and a hosted demo, add badges for them here, e.g.:
<a href="#"><img alt="Demo" src="https://img.shields.io/badge/Demo-try-111827?style=for-the-badge" /></a>
<img alt="CI" src="https://img.shields.io/github/actions/workflow/status/nikmtl/recipe-cloud/test.yml?branch=main&style=for-the-badge" />
<a href="#"><img alt="Docker" src="https://img.shields.io/badge/Docker-ready-2496ED?style=for-the-badge" /></a>
-->

<a href="LICENSE"><img alt="License" src="https://img.shields.io/github/license/nikmtl/recipe-cloud?style=flat-square&color=6B7280" /></a>
<a href="https://github.com/nikmtl/recipe-cloud/releases"><img alt="Latest Release" src="https://img.shields.io/github/v/release/nikmtl/recipe-cloud?include_prereleases&style=flat-square&color=6B7280" /></a>
<a href="https://github.com/nikmtl/recipe-cloud"><img alt="Stars" src="https://img.shields.io/github/stars/nikmtl/recipe-cloud?style=flat-square&color=6B7280" /></a>

</div>

<!-- TODO: hero screenshot/GIF once there's a UI to show, e.g.:
<div align="center">
  <img src="docs/assets/hero.webp" alt="Recipe Cloud, a tour of the app" width="100%" />
</div>
-->

<br />

<div align="center">

[Features](#features) · [Get started](#get-started) · [Tech stack](#tech-stack) · [Docs](docs/system-architecture.md) · [License](#license--contribution) · [Contributing](#license--contribution)
<!-- TODO: Update according to the latest changes-->

</div>

---

## Features

### Access levels

Recipe Cloud is self-hosted and account-based: almost everything requires logging in. The one exception is a public, read-only share link an account holder can generate for a single recipe.

**Without an account**
- Open a recipe via a public share link and view it (ingredients, steps, images) — read only, no account prompts, no interaction

**With an account**
- Everything else: manage your personal recipe library, join or create households, share recipes with specific users or households, generate public share links, use AI import/enhancement, plan meals, build shopping lists, use cooking mode, and so on

<details>
<summary><b>See all features</b></summary>

<br />

<table>
<tr>
<td width="50%" valign="top">

#### 🍲 Recipes (planned)

- Create, edit, duplicate, archive, and delete recipes
- Organize recipes with tags, categories, cuisines, and favorites
- Add preparation time, cooking time, servings, difficulty, cuisine, and nutritional information
- Add ingredients and steps, including images, videos, and notes
- Import recipes automatically from websites that publish structured recipe data (schema.org/Recipe)

#### 🍽️ Cooking (planned)

- Add an image or short video to every recipe step
- Use a distraction-free step-by-step cooking mode
- Keep the screen awake while cooking
- Scale ingredient quantities automatically by serving size
- Convert units between metric, imperial, volume, and weight
- Support timers directly inside recipe steps

</td>
<td width="50%" valign="top">

#### 📅 Optional planning (planned)

- Build weekly meal plans from saved recipes
- Generate and share shopping lists automatically
- Combine ingredients from multiple recipes and group them by store section
- Export shopping lists to other apps

#### 🤖 AI (planned)

- Import recipes from websites, Instagram/TikTok/YouTube videos, or unstructured/pasted text using AI parsing
- Use AI to enhance existing recipes: steps, tags, nutritional analysis, and so on
- Automatically link ingredients to the steps that use them
- Support multiple AI providers, configurable instance-wide
- iOS app directly appearing in the share sheet to import recipes from other apps

</td>
</tr>
<tr>
<td width="50%" valign="top">

#### 👥 Collaboration & sharing (planned)

- Every recipe belongs to a personal library by default
- Create or join one or more households; household members share access to that household's recipe collection
- Share an individual recipe directly with another specific logged-in user, without a shared household
- Set permissions for viewing, editing, and managing recipes within a household
- Generate a read-only public link for a single recipe so anyone can view it without an account — there is no public, browsable recipe library
- See who created or last updated a recipe

#### 📱 Access & personalization (planned)

- Search recipes by title, ingredient, tag, or dietary preference
- Use the app on mobile, tablet, and desktop
- Work offline and synchronize changes when back online
- Export recipes as PDF (print), Markdown, or JSON
- Generate a full cookbook PDF with all recipes in a household or personal library
- Import and export a complete recipe library for backups and other apps
- Support multiple languages

</td>
<td width="50%" valign="top">

#### ⚙️ Accounts & administration (planned)

- Sign up with email & password/passkey (or OAuth)
- Instance admin chooses whether registration is open to anyone or invite/admin-only
- Reset password via email
- Admin panel: manage user accounts (invite, disable, delete), oversee households and revoke public links, configure instance-wide settings (registration mode, AI provider/keys, default language)
- Optional 2FA and passkey login, admin-togglable per instance

</td>
</tr>
</table>

</details>

<br />

## Get started

<!-- TODO: Recipe Cloud is still in the planning stage — no runnable build yet.
Once there's a Docker image and a docker-compose.yml, replace this section with
real install steps, e.g.:

```bash
docker compose up -d
```
-->

Recipe Cloud is currently in the planning/design phase — there's no installable release yet. Check back here once an image is published.

<br />

## Tech stack

<div align="center">

![NestJS](https://img.shields.io/badge/NestJS-E0234E?style=flat-square&logo=nestjs&logoColor=white)
![TypeScript](https://img.shields.io/badge/TypeScript-3178C6?style=flat-square&logo=typescript&logoColor=white)
![PostgreSQL](https://img.shields.io/badge/PostgreSQL-4169E1?style=flat-square&logo=postgresql&logoColor=white)
![Prisma](https://img.shields.io/badge/Prisma-2D3748?style=flat-square&logo=prisma&logoColor=white)
![Redis](https://img.shields.io/badge/Redis-DC382D?style=flat-square&logo=redis&logoColor=white)
![MinIO](https://img.shields.io/badge/MinIO-C72E49?style=flat-square&logo=minio&logoColor=white)
![Next.js](https://img.shields.io/badge/Next.js-000000?style=flat-square&logo=next.js&logoColor=white)
![Swift](https://img.shields.io/badge/Swift-F05138?style=flat-square&logo=swift&logoColor=white)
![Docker](https://img.shields.io/badge/Docker-2496ED?style=flat-square&logo=docker&logoColor=white)

</div>

Backend on NestJS with a PostgreSQL + Prisma database, Redis for caching/sessions/background jobs, and MinIO (S3-compatible) for recipe images. Real-time collaboration over WebSockets. Web frontend on Next.js; a native SwiftUI iOS app talks to the same REST API. See [docs/system-architecture.md](docs/system-architecture.md) for the full breakdown.

<br />

## License & Contribution

Recipe Cloud is licensed under the [GNU GPLv3](LICENSE).

See [CONTRIBUTING.md](CONTRIBUTING.md) for contribution guidelines. If you want to contribute, please read the guidelines first and then open an issue or pull request.

<br />
<br />
<br />

<div align="center">

Happy Cooking! 👨‍🍳👩‍🍳
<p style="color: gray; font-size: smaller; font-style: italic; transform: translate(0, -1.3em);">#novibecode #selfhosted</p>

</div>
