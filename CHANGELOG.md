# Change Log
El formato de este documento está basado en [Keep a Changelog](http://keepachangelog.com/) 
y usa versionado semántico [Semantic Versioning](http://semver.org/).


## [1.0.0] - 2016-11-11
### Added
- Agrego CHANGELOG.md
- Nueva forma de organizar el JS. Con el nuevo helper PHP "Plugins" se genera un array con nombres de funcionalidades JS  a cargar.
  Todo el JS ahora está en main.js y se va cargando junto con su CSS según se active la funcionalidad o no.
- El captcha ya no depende de jQuery para generarse

### Changed
- Remuevo del CSS y JS de Boostrap todo lo que no se usa.
  [http://getbootstrap.com/customize/?id=7298e6f1ebdbdb6a3cd32d1b43dd5118]
- Actualizo jQuery a la versión 2.2.4
- Actualizo WOW a la versión 2.2.4, agrego valores por defecto y desactivo la animaciones para elementos cargados con AJAX
- Actualizo la etiqueta meta charset

### Fixed
- Pongo la URL correcta para el error 404