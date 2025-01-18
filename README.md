**Check pull-requests for proposed interfaces**

# Stream Interoperability

[![Latest Stable Version](https://poser.pugx.org/stream-interop/stream-interop/v/stable.png)](https://packagist.org/packages/stream-interop/stream-interop)
[![Total Downloads](https://poser.pugx.org/stream-interop/stream-interop/downloads.svg)](https://packagist.org/packages/stream-interop/stream-interop)
[![PDS Skeleton](https://img.shields.io/badge/pds-skeleton-blue.svg?style=flat-square)](https://github.com/php-pds/skeleton)
[![PDS Composer Script Names](https://img.shields.io/badge/pds-composer--script--names-blue?style=flat-square)](https://github.com/php-pds/composer-script-names)

## About

*stream-interop* tries to identify and standardize features used by resource streams (readable,
writable, duplex, buffered etc.) to achieve interoperability.

Through discussions and trials, we will attempt to create a standard, made of common interfaces but also recommendations.

If PHP projects that provide stream implementations begin to adopt these common standards, then PHP
applications and projects that use streams can depend on the common interfaces instead of specific
implementations. This facilitates a high-level of interoperability and flexibility that allows users to consume
*any* stream implementation that can be adapted to these interfaces.

The work done in this project is not officially endorsed by the [PHP-FIG](http://www.php-fig.org/), but it is being
worked on by members of PHP-FIG and other good developers. We adhere to the spirit and ideals of PHP-FIG, and hope
this project will pave the way for one or more future PSRs.


## Installation

You can install this package through Composer:

```json
composer require stream-interop/stream-interop
```

The packages adheres to the [SemVer](http://semver.org/) specification, and there will be full backward compatibility
between minor versions.

## Standards

### Available

- [`Duplex`](src/Duplex.php) - Describes the contract of a *duplex* stream and the methods and properties it exposes.
[[Description](docs/Duplex.md)] [[Meta Document](docs/Duplex-meta.md).]
- [`Lockable`](src/Duplex.php) - Describes the contract of a *lockable* stream and the methods and properties it exposes.
[[Description](docs/Duplex.md)] [[Meta Document](docs/Duplex-meta.md).]
- [`Readable`](src/Readable.php) - Describes the contract of a *readable* stream and the methods and properties it exposes.
[[Description](docs/Readable.md)] [[Meta Document](docs/Readable-meta.md).]
- [`Seekable`](src/Seekable.php) - Describes the contract of a *seekable* stream and the methods and properties it exposes.
[[Description](docs/Seekable.md)] [[Meta Document](docs/Seekable-meta.md).]
- [`Transform`](src/Transform.php) - Describes the contract of a *transform* stream and the methods and properties it exposes.
[[Description](docs/Transform.md)] [[Meta Document](docs/Transform-meta.md).]
- [`Writable`](src/Writable.php) - Describes the contract of a *writable* stream and the methods and properties it exposes.
[[Description](docs/Writable.md)] [[Meta Document](docs/Writable-meta.md).]

### Proposed

View open [request for comments](https://github.com/stream-interop/stream-interop/labels/RFC)

## Compatible projects

### Projects implementing `stream-interop`

### Projects using `stream-interop`

## Workflow

Everyone is welcome to join and contribute.

The general workflow looks like this:

1. Someone opens a discussion (GitHub issue) to suggest an interface
1. Feedback is gathered
1. The interface is added to a development branch
1. We release alpha versions so that the interface can be experimented with
1. Discussions and edits ensue until the interface is deemed stable by a general consensus
1. A new minor version of the package is released

We try to not break BC by creating new interfaces instead of editing existing ones.

While we currently work on interfaces, we are open to anything that might help towards interoperability, may that
be code, best practices, etc.
