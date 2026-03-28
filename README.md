# MaplePHP - Your code. Your libraries. Your framework.

MaplePHP is a high-performance PHP 8.2+ framework built on PSR standards and modern best practices. It provides the core infrastructure needed for real applications — MVC architecture, dependency injection, routing, middleware, caching, logging, error handling, and full support for both web and CLI environments — while keeping every component swappable.

The goal is not to lock you into a fixed ecosystem. Each `maplephp/*` library is independently installable and PSR-compliant. You shape the framework around your own stack and workflow, while still benefiting from updates to the core.

**Requires PHP 8.2+**

> This framework is currently in beta. Use `--stability=beta` when installing.

---

## Documentation
For full documentation, visit [maplephp.github.io/maplephp](https://maplephp.github.io/maplephp/)

## Quick Start

### Installation

```bash
composer create-project maplephp/maplephp my-app --stability=beta
cd my-app
./maple serve
```

Visit `http://localhost:8000` to see the default welcome page.