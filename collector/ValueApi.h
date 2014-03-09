/*
 * Buderus EMS data collector
 *
 * Copyright (C) 2014 Danny Baumann <dannybaumann@web.de>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

#ifndef __VALUEAPI_H__
#define __VALUEAPI_H__

#include "EmsMessage.h"

namespace ValueApi {
    std::string getTypeName(EmsValue::Type type);
    std::string getSubTypeName(EmsValue::SubType subtype);
    std::string formatValue(const EmsValue& value);
}

#endif /* __DATAHANDLER_H__ */
